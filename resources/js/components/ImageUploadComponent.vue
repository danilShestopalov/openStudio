<template>
    <div class="container">
        <div class="progress" style="height: 40px">
            <div class="progress-bar" role="progressbar" :style="{ width: fileProgress + '%'}">
                {{ fileCurrent }}%
            </div>

            <hr>

            <input type="file" name="image" multiple="" @change="fileInputChange">

            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-center">Файлы в очереди ({{ filesOrder.length }})</h3>
                    <ul class="list-group">
                        <li class="list-group-item" v-for="file in filesOrder">
                            {{ file.name }} : {{ file.type }}
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3 class="text-center">Загруженные файлы ({{ filesFinish.length }})</h3>
                    <ul class="list-group">
                        <li class="list-group-item" v-for="file in filesFinish">
                            {{ file.name }} : {{ file.type }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                filesOrder: [],
                filesFinish: [],
                fileProgress: 0,
                fileCurrent: '',
            }
        },
        methods: {
            async fileInputChange() {
                let files = Array.from(event.target.files);

                this.filesOrder = files.slice;

                for(let item of files) {
                    await this.uploadFile(item);
                }
            },
            async uploadFile(item) {
                let form = new FormData();
                form.append('image', item);
                console.log('FORMA: ' + form);
                await axios.post('/file/upload/1/startup', form, {
                    onUploadProgress: (itemUpload) => {
                        this.fileProgress = Math.round((itemUpload.loaded / itemUpload.total) * 100);
                        this.fileCurrent = item.name + ' ' + this.fileProgress;
                        }
                    }
                ).then(response => {
                    this.fileProgress = 0;
                    this.fileCurrent = '';
                    this.filesFinish.push(item);
                    this.filesOrder.splice(item, 1);
                }).catch(error => {
                    console.log(error);
                })

            }

        },
    }
</script>

<style>
    .progress {
        height: 40px;
    }
</style>
