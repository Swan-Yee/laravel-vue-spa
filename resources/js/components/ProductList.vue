<template>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id">
                        <td>{{ product.id }}</td>
                        <td>{{ product.name }}</td>
                        <td>{{ product.price }}</td>
                        <td>
                            <button
                                class="btn btn-success"
                                @click="edit(product)"
                            >
                                Edit
                            </button>
                            <button
                                class="btn btn-danger"
                                @click="deleteProduct(product.id)"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductList",
    props: ["products"],
    methods: {
        edit(product) {
            this.$emit("edit", product);
        },
        deleteProduct(id) {
            this.$emit("delete", id);
        },
    },
};
</script>
