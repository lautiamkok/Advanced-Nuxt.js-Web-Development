<template>
  <div/>
</template>

<script setup>
// Define props to receive data from the parent component.
const props = defineProps({
  error: {
    // Can be Object or Boolean
    type: [ Object, Boolean ], 
    default: false
  }
})

console.log('props.error =', props.error)

// Let the global `error.vue` file handles the error.
// https://nuxt.com/docs/api/utils/show-error
if (props.error) {
  showError({ 
    statusCode: props.error.statusCode || 500, 
    statusMessage: `${props.error.name} - ${props.error.message}`,
    stack: props.error.stack
  })
}
</script>
