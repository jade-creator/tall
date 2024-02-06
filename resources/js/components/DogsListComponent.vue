<template>
    <div class="shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-500 w-full">
            <thead>
                <tr>
                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                        Breed
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                        Random Image
                    </th>
                    <th scope="col" width="100" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-500">
                <tr v-for="dog in dogData" :key="dog.breed">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                        {{ dog.breed }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                        <img width="150" :src="dog.image" :alt="dog.breed + ' Image'">
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <form v-if="!isLiked(dog.breed)" method="post" action="/dogs">
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="name" :value="dog.breed">
                            <input type="hidden" name="image" :value="dog.image">
                            <button
                                type="submit"
                                class="text-blue-400 hover:text-blue-900 mb-2 mr-2 cursor-pointer">
                                Like
                            </button>
                        </form>
                        <form v-else method="post" action="/dogs">
                            <button
                                @click.prevent="unlike(dog)"
                                class="text-red-400 hover:text-red-900 mb-2 mr-2 cursor-pointer">
                                Unlike
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
  data() {
    return {
      dogData: [],
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      likedDogs: [],
    };
  },
  mounted() {
    this.fetchDogBreeds();
    this.fetchLikedDogs();
  },
  methods: {
    async fetchLikedDogs() {
      try {
        const response = await axios.get('/api/dogs/list');

        this.likedDogs = response.data.data;
      } catch (error) {
        console.error('Error fetching liked dogs:', error);
      }
    },
    async fetchDogBreeds() {
      try {
        const response = await axios.get('https://dog.ceo/api/breeds/list/all');
        const breeds = response.data.message;

        const dogData = [];

        for (const breed in breeds) {
          if (breeds[breed].length === 0) {
            dogData.push({
              breed: breed,
              image: await this.getRandomImage(breed),
            });
          } else {
            for (const subBreed of breeds[breed]) {
              dogData.push({
                breed: `${breed}-${subBreed}`,
                image: await this.getRandomImage(`${breed}/${subBreed}`),
              });
            }
          }
        }

        this.dogData = dogData;
      } catch (error) {
        console.error('Error fetching dog breeds:', error);
      }
    },
    async getRandomImage(breed) {
      try {
        const response = await axios.get(`https://dog.ceo/api/breed/${breed}/images`);
        const images = response.data.message;

        return images[Math.floor(Math.random() * images.length)];
      } catch (error) {
        console.error('Error fetching random image for breed:', error);
        return '';
      }
    },
    isLiked(name) {
        return this.likedDogs.some(breed => breed.name === name)
    },
    async unlike(dog) {
        try {
            await axios.delete(`/api/dogs/${dog.breed}`);

            this.fetchDogBreeds();
            this.fetchLikedDogs();
        } catch (error) {
            console.error('Error deleting dog record:', error);
        }
    }
  },
};
</script>
