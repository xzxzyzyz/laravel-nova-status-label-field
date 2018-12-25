export default {
  computed: {
    isInfo() {
      const arr = this.field.info || [];
      return arr.indexOf(this.field.value) === 0;
    },
    isSuccess() {
      const arr = this.field.success || [];
      return arr.indexOf(this.field.value) === 0;
    },
    isWarning() {
      const arr = this.field.warning || [];
      return arr.indexOf(this.field.value) === 0;
    },
    isDanger() {
      const arr = this.field.danger || [];
      return arr.indexOf(this.field.value) === 0;
    },
    successStyle() {
      return this.field.successStyle || {};
    },
    warningStyle() {
      return this.field.warningStyle || {};
    },
    dangerStyle() {
      return this.field.dangerStyle || {};
    },
    disableStyle() {
      return this.field.disableStyle || {};
    }
  },
}
