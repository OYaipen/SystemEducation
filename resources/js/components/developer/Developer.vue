<template>
  <div>
    <div class="container" v-if="$gate.isAuthorizeDeveloper()">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <passport-clients></passport-clients>
          <passport-authorized-clients></passport-authorized-clients>
          <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
      </div>
    </div>
    <div v-else>
      <not-found />
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
