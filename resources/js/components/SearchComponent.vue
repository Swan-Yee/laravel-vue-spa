<template>
    <div class="row">
        <div class="col-8 offset-4 d-flex justify-content-between mb-3">
            <button
                class="btn btn-primary"
                :class="isEdit ? '' : 'disabled'"
                @click="create"
            >
                Create
            </button>
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "SearchComponent",
    props: ["isEdit"],
    methods: {
        create() {
            this.$emit("create");
        },
    },
};
</script>

<style></style>
