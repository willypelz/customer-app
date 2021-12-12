<template>
  <div>
    <v-card class="d-flex justify-center pa-8 mx-auto">
      <p>
        <v-icon>mdi-alert-circle</v-icon>
        <slot></slot>
      </p>
    </v-card>
  </div>
</template>


<style>
  @import "./nocontent.scss";
</style>

<script src="./nocontent.js"></script>
