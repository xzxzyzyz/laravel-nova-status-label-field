<template>
    <span>
        <span v-if="isSuccess" class="status status--success uppercase px-3 py-1 font-bold mr-3" :style="successStyle">{{ field.value }}</span>
        <span v-else-if="isInfo" class="status status--info uppercase px-3 py-1 font-bold mr-3" :style="infoStyle">{{ field.value }}</span>
        <span v-else-if="isWarning" class="status status--warning uppercase px-3 py-1 font-bold mr-3" :style="warningStyle">{{ field.value }}</span>
        <span v-else-if="isDanger" class="status status--danger uppercase px-3 py-1 font-bold mr-3" :style="dangerStyle">{{ field.value }}</span>
        <span v-else class="status status--disabled uppercase px-3 py-1 font-bold mr-3" :style="disableStyle">{{ field.value }}</span>
    </span>

</template>

<script>
import StatusColors from '../mixins/StatusColors';

export default {
    props: ['resourceName', 'field'],
    mixins: [StatusColors]
}
</script>

<style scoped>
    .status {
        font-size: .6em;
        border-radius: .5rem;
        border: 1px solid rgba(64,158,255,.2);
    }

    .status--info {
        background-color: rgba(64,158,255,.1);
        color: #409eff;
    }

    .status--disabled {
        background-color: hsla(220,4%,58%,.1);
        border-color: hsla(220,4%,58%,.2);
        color: #909399;
    }

    .status--success {
        background-color: rgba(103,194,58,.1);
        border-color: rgba(103,194,58,.2);
        color: #67c23a;
    }

    .status--danger {
        background-color: hsla(0,87%,69%,.1);
        border-color: hsla(0,87%,69%,.2);
        color: #f56c6c;
    }

    .status--warning {
        background-color: rgba(230,162,60,.1);
        border-color: rgba(230,162,60,.2);
        color: #e6a23c;
    }
</style>
