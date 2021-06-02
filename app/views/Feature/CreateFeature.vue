<template>
    <div class="app-container">
        <el-form ref="form" :model="feature" :rules="rules" label-width="120px">
            <el-form-item label="Name" prop="name">
                <el-input v-model="feature.name" clearable />
            </el-form-item>

            <el-form-item label="Nổi bật" prop="is_primary">
                <el-switch v-model="feature.is_primary"></el-switch>
            </el-form-item>

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
</template>


<script>
import Resource from '../../api/resource'
const featureResource = new Resource('v1/feature')

export default {
    data(){
        return{
            feature:{
                id: '',
                name: '',
                is_primary: false,
                primary: '',
                feature_pack_id: '',
                status: '',
            },
            rules: {
                name: [
                    { required:true, message: "Vui lòng nhập tên tính năng", trigger: 'blur'}
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
            console.log(this.feature)
        }
    }
}
</script>
