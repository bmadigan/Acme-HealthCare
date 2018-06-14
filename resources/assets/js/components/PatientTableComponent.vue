<template>
    <div>
        <div class="flex justify-between items-center border-b pb-3 mb-8">
            <h1 class="text-2xl text-blue-darker">Your Patient Listing</h1>
            <button class="btn btn-secondary text-sm" @click="openNew">
                <i class="fas fa-plus-circle mr-2"></i> ADD PATIENT
            </button>
        </div>

        <div class="segment">
            <div class="mt-2">
                <p class="text-center text-xs text-grey leading-normal">
                    Please Note: The EDIT and ADD are not completed. Quickly ran out of time.<br>
                    You can however click each Patient's name to populate the Modal.
                </p>
            </div>
            <div class="mt-2">
                <table-component
                    :data="getPatients"
                    :sort-by="name"
                    :sort-order="asc"
                    table-class="table"
                    :show-filter=false
                    @rowClick="selectPatient"
                >
                    <table-column :sortable=false show="name" label="Patient Name" header-class="table-thead" cell-class="table-tbody font-bold"></table-column>
                    <table-column :sortable=false show="patient_number" label="Patient Num" header-class="table-thead" cell-class="table-tbody"></table-column>
                    <table-column :sortable=false show="health_status" label="Status" :filterable="false" header-class="table-thead" cell-class="table-tbody"></table-column>
                    <table-column :sortable=false show="email" label="Email" header-class="table-thead" cell-class="table-tbody"></table-column>
                    <table-column :sortable=false show="medicare_id" label="Medicare ID" header-class="table-thead" cell-class="table-tbody"></table-column>
                </table-component>
            </div>
        </div>

        <div v-show="showModal" class="fixed pin bg-black-40 flex justify-center items-center py-24">
            <div  ref="modal"
                @focusout="handleFocusOut"
                class="max-w-sm w-full bg-white rounded-lg p-6 shadow-lg">
                <h3 class="font-semibold text-md text-blue text-center mb-4 uppercase">Patient Information</h3>
                <label class="block mb-4">
                     <span class="block text-sm font-bold mb-2">Patient Name</span>
                    <input type="text" class="form-input-text" placeholder="John Smith" v-model="selectedPatient.name" autofocus>
                </label>
                <label class="block mb-4">
                    <span class="block text-sm font-bold mb-2">Patient Num</span>
                    <input type="text" class="form-input-text" placeholder="EG. PIN-2123123" v-model="selectedPatient.patient_number">
                </label>
                <label class="block">
                    <span class="block text-sm font-bold mb-2">Email Address</span>
                    <input type="text" class="form-input-text" placeholder="Patient-Name@theiremail.com" v-model="selectedPatient.email">
                </label>
                <div class="mt-6 mb-4">
                    <button type="submit" class="btn btn-primary block w-full">Save Patient Information</button>
                </div>
                <div class="text-center">
                    <p class="text-center text-xs text-grey">Press <span class="font-bold">ESC</span> to close</p>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import { TableComponent, TableColumn } from 'vue-table-component';
    import axios from 'axios';

    Vue.component('table-component', TableComponent);
    Vue.component('table-column', TableColumn);

    export default {
        data() {
            return {
                showModal: false,
                selectedPatient: {}
            }
        },
        // Listen for the Escape key (Close Modal)
        created() {
            const escapeListener = (e) => {
                if (e.key === 'Escape') {
                    this.closeModal();
                }
            }
            document.addEventListener('keydown', escapeListener)
            this.$on('hook:beforeDestory', () => {
                document.removeEventListener('keydown', escapeListener)
            })
        },
        methods: {
            async getPatients() {
                const response = await axios.get('/patients');
                return response;
            },
            selectPatient(row) {
                this.openModal(row.data);
            },
            openModal(data) {
                this.showModal = true;
                this.selectedPatient.name = data.name;
                this.selectedPatient.email = data.email;
                this.selectedPatient.patient_number = data.patient_number;
            },
            handleFocusOut(e) {
                if (this.$refs.modal.contains(e.relatedTarge)) { return }
                this.closeModal();
            },
            closeModal() {
                this.showModal = false;
                this.clearSelectedPatient();
            },
            clearSelectedPatient() {
                this.selectedPatient.name = null;
                this.selectedPatient.email = null;
                this.selectedPatient.patient_number = null;
            },
            openNew() {
                alert('This would be a modal to create a new patient.')
            }
        }
    }
</script>
