<template>
    <div>
        <v-snackbar
                v-model="snackbar"
                :timeout="snackbar.timeout"
                v-if="snackbar.status"
        >
            <slot></slot>
            <v-btn
                    color="blue"
                    text
                    @click="snackbar.status = false"
            >
                Close
            </v-btn>
        </v-snackbar>
    </div>
</template>


<style>
    @import "./snackbar.scss";
</style>

<script src="./snackbar.js"></script>
