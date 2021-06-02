<template>
    <div class="app-container">
        <el-form ref="form" :model="feature_pack" :rules="rules" label-width="120px">
            <el-form-item label="Title" prop="title">
                <el-input v-model="feature_pack.title" clearable />
            </el-form-item>
            <el-form-item label="Price" prop="price">
                <el-input type="number" v-model="feature_pack.price" clearable />
            </el-form-item>
            <el-form-item label="Price Sale" prop="price_sale">
                <el-input type="number" v-model="feature_pack.price_sale" clearable />
            </el-form-item>

<!--            <el-form-item label="Nổi bật" prop="is_primary">-->
<!--                <el-switch v-model="feature.is_primary"></el-switch>-->
<!--            </el-form-item>-->

            <!--            <el-form-item label="Chọn gói" prop="feature_pack_id">-->
            <!--                <el-select v-model="feature.feature_pack_id" placeholder="Gói tính năng" clearable>-->
            <!--                    <el-option>-->
            <!--                        DUng-->
            <!--                    </el-option>-->
            <!--                </el-select>-->
            <!--            </el-form-item>-->
            <el-form-item>
                <el-button type="primary" @click="validate('form')">Save</el-button>
            </el-form-item>
        </el-form>
    </div>
    <div class="app-container">
        <el-row class="toolbar">
            <el-col :span="24">
                <el-button type="primary" @click="create()" icon="el-icon-plus"
                           plain size="small" style="float: right;">Thêm Mới</el-button>
            </el-col>
        </el-row>
    </div>
</template>


<script>
import Resource from '../../api/resource'
const featureResource = new Resource('v1/feature')

export default {
    data(){
        return{
            feature_pack:{
                id: '',
                title: '',
                price: '',
                price_sale: '',
                status: '',
            },
            rules: {
                title: [
                    { required:true, message: "Vui lòng nhập tên gói", trigger: 'blur'}
                ]
            }
        }
    },
    methods: {
        validate(formName){
            this.$refs[formName].validate(valid=>{
                console.log(valid)
                if(valid) this.save()
            });
        },
        async save(){
            const res = await featureResource.store()
            // const res = await Resource.list({});
            console.log(this.feature_pack)
        }
    }
}
</script>
