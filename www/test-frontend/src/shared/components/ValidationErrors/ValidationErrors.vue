<template>
  <div v-if="validationErrors">
    <v-alert
        dense
        type="error"
        dismissible
        v-for="(value, key, index) in validationErrors"
        :key="index"
    >
      {{ value }}
    </v-alert>
  </div>
</template>

<script>
    export default {
      props: ['errors'],
      computed: {
        validationErrors(){
          let errors = Object.values(this.errors);
          errors = errors.flat();
          return errors;
        }
      }
    };
</script>
