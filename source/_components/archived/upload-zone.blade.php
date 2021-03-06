<button 

    x-data="{
        file: null,
        fileUpdated: function (e) {

            const file = e.target.files[0];
            
            if (file !== undefined) {
                this.file = file.name;
            } else {
                this.file = null;
            }

        }
    }"

    @click="$refs['file-input'].click()"

    class="w-full cursor-pointer border border-dashed border-gray-300 rounded focus:outline-none focus:shadow-outline cursor-pointer px-16 py-12 flex flex-col items-center justify-center text-gray-600 text-center transition duration-150 hover:border-gray-400"  
    :class="file !== null ? 'text-primary' : 'hover:text-gray-600'"
>
        <svg class="w-12 fill-current mb-3" viewBox="0 -20 339.225 339" xmlns="http://www.w3.org/2000/svg"><path d="M282.973 64.426H56.027a5.676 5.676 0 00-5.675 5.676v158.863a5.675 5.675 0 005.675 5.672h226.946a5.671 5.671 0 005.672-5.672V70.102a5.675 5.675 0 00-5.672-5.676zM67.05 223.289l45.71-63.996 25.024 34.977-16.93 29.02zm66.949 0l69.54-119.23 69.554 119.23zM277.297 75.773v132.2L208.445 89.957a5.909 5.909 0 00-9.804 0l-54.594 93.617-26.664-37.293a5.677 5.677 0 00-4.621-2.422c-1.832 0-3.551.883-4.617 2.375l-46.442 65.02V75.774zm0 0"/><path d="M338.438 210.02l-15.75-58.786V47.406c0-9.398-7.622-17.02-17.02-17.02h-15.387l-4.726-17.726C283.082 3.617 273.77-1.738 264.71.68L153.777 30.387H33.332c-9.398 0-17.02 7.62-17.02 17.02v19.808l-3.699.984C3.563 70.672-1.812 79.97.563 89.047l15.75 58.785V251.66c0 9.399 7.62 17.02 17.019 17.02h15.387l4.726 17.722c2.442 9.063 11.766 14.43 20.828 11.989.004-.004.012-.004.016-.004l110.934-29.707h120.445c9.398 0 17.02-7.621 17.02-17.024v-19.804l3.699-.989c9.05-2.468 14.426-11.765 12.05-20.843zM267.651 11.664a5.672 5.672 0 016.934 3.969l3.937 14.754h-80.882zM11.527 86.13a5.737 5.737 0 014.028-6.973l.757-.199v25.031zm59.817 201.3a5.676 5.676 0 01-6.934-3.968l-3.945-14.781h80.894zM311.34 251.66a5.671 5.671 0 01-5.672 5.672H33.332a5.671 5.671 0 01-5.672-5.672V47.406a5.671 5.671 0 015.672-5.672h272.336a5.671 5.671 0 015.672 5.672zm12.101-31.773l-.754.218v-25.03l4.786 17.859a5.741 5.741 0 01-4.032 6.953zm0 0"/><path d="M135.457 138.184c12.535 0 22.695-10.16 22.695-22.692 0-12.535-10.16-22.695-22.695-22.695s-22.695 10.16-22.695 22.695c0 12.531 10.16 22.692 22.695 22.692zm0-34.04c6.266 0 11.348 5.079 11.348 11.348 0 6.266-5.082 11.344-11.348 11.344s-11.348-5.078-11.348-11.344c0-6.27 5.082-11.347 11.348-11.347zm0 0"/></svg>

        <p x-show="file === null" class="font-semibold" for="file-input">Upload file or drag & drop</p>

        <p x-show="file !== null" x-text="`File: ${file}`" class="font-semibold"></p>

        <input @change="fileUpdated" aria-label="Upload file" class="hidden" x-ref="file-input" type="file" id="file-input" name="File">
        
</button>
   