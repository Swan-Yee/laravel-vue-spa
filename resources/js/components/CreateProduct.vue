<template>
    <div class="card">
        <h3 class="card-header">Create</h3>
        <div class="card-body">
            <form @submit.prevent="create">
                <div class="form-group">
                    <label>Name</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="product.name"
                    />
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input
                        type="number"
                        class="form-control"
                        v-model="product.price"
                    />
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreateProduct",
    props: ["product"],
    methods: {
        create() {
            this.$emit("create");
        },
    },
};
</script>
