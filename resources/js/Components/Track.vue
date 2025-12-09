<template>
    <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow">
        <div class="flex items-center space-x-4">
            <img
                v-if="track.image"
                :src="track.image"
                :alt="track.title"
                class="w-20 h-20 rounded object-cover"
            />
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900">
                    {{ track.title }}
                </h3>
                <p class="text-gray-600">{{ track.artist }}</p>
                <p v-if="track.play_count" class="text-sm text-gray-500">
                    {{ track.play_count }} écoutes
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Track",
    props: {
        track: {
            type: Object,
            required: true,
        },
    },
};
</script>
