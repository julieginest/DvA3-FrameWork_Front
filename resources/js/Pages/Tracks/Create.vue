<template>
    <MusicLayout>
        <template #title>Create tracks</template>
        <template #actions>
            <Link :href="tracks.index">Retour</Link>
        </template>
        <template #content>
            <div>
                
            </div>
        </template>
    </MusicLayout>
</template>

<script>
import MusicLayout from "@/Layouts/MusicLayout.vue";
import Track from "@/Components/Track.vue";
import { Link } from "inertiajs/vue3"
export default {
    name: "Create",
    components: {
        MusicLayout,
        Track,
    },
    props: {
        tracks: Array,
    },
};
</script>
