<template>
  <div class="d-flex justify-center loader-spaced">
    <v-progress-circular
            :size="50"
            color="warning"
            indeterminate
    ></v-progress-circular>
  </div>
</template>

<style>
  @import "./loading.scss";
</style>

<script src="./loading.js"></script>
