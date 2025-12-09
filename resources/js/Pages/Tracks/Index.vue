<template>
    <MusicLayout>
        <template #title>Tracks</template>
        <template #actions>
            <Link :href="tracks.create">Create</Link>
        </template>
        <template #content>
            <div>
                <Track
                    v-for="track in tracks"
                    :key="track.slug"
                    :track="track"
                />
            </div>
        </template>
    </MusicLayout>
</template>

<script>
import MusicLayout from "@/Layouts/MusicLayout.vue";
import Track from "@/Components/Track.vue";
import { Link } from "inertiajs/vue3"
export default {
    name: "Index",
    components: {
        MusicLayout,
        Track,
    },
    props: {
        tracks: Array,
    },
};
</script>
