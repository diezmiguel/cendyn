<template>
<transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
              {{ title }}{{userId}}
          </div>

          <div class="modal-body">
            <slot></slot>
          </div>

          <div class="modal-footer">
              <button class="btn btn-primary btn-sm" @click.prevent="close()">
                Close
              </button>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>
<script>
  export default {
    props: {
          title : {
              type: String,
          },
          userId : {
              type: Number
          }
      },
    name:'modal',
    methods: {
        close() {
            this.$emit('toggle-modal');
        }
    }
  }
</script>
