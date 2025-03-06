<?php

use function Livewire\Volt\{state, mount, usesFileUploads};
use Livewire\Attributes\On;

usesFileUploads();

state([
    'file' => null,
    'uploadedPath' => '',
    'inputName' => '',
    'progress' => null
]);

mount(function ($inputName) {
    $this->inputName = $inputName;
});

function updatedFile() {
    save();
};

$save = function () {
    $this->validate([
        'file' => 'required|mimes:png,jpg,jpeg|max:524',
    ]);

    $path = $this->file->store('public/applications');
    $this->uploadedPath = str_replace('public/applications/', '', $path);
    
    // Prevent multiple refreshes by deferring the loading state
    $this->dispatch('uploaded', [
        'path' => $this->uploadedPath,
        'inputName' => $this->inputName
    ]);
};

$clearPath = function () {
    $this->uploadedPath = "";
};

#[On('upload-progress')]
function handleProgress($progress) {
    $this->progress = $progress;
}

?>

<div class="mb-30" wire:ignore.self>
    <div class="mb-3">
        @if ($file)
            <img src="{{ $file->temporaryUrl() }}" 
                 alt="File Preview"
                 style="width: 200px; height: 150px; object-fit: cover; border: 2px solid #ddd; border-radius: 4px;">
        @else
            <div class="bg-gray-100 rounded flex items-center justify-center"
                 style="width: 200px; height: auto; border: 2px dashed #ddd;">
                <p class="text-gray-400 px-2 py-2">No file for {{ ucfirst(str_replace('_', ' ', $inputName)) }}</p>
            </div>
        @endif
    </div>

    <label for="file-{{ $inputName }}">{{ ucfirst(str_replace('_', ' ', $inputName)) }}  
    @if ($inputName == 'last_semester_result')
            (Optional)
    @else
        <span style="color: red;">*</span>
    @endif
    </label>

    <div class="d-flex">
        <input type="file" 
               class="form-control form-control-sm" 
               wire:model="file"
{{-- wire:model.defer="file" --}}
               id="file-{{ $inputName }}"
               wire:change="clearPath"
               accept="image/*" />
        <span style="cursor: pointer;" class="btn btn-primary btn-sm ms-2" wire:click="save">Save</span>
    </div>

    <!-- Add progress bar -->
    @if($progress)
    <div class="mt-2">
        <div class="progress" style="height: 3px;">
            <div class="progress-bar" role="progressbar" 
                 style="width: {{ $progress }}%;" 
                 aria-valuenow="{{ $progress }}" 
                 aria-valuemin="0" 
                 aria-valuemax="100"></div>
        </div>
        <div class="text-sm text-gray-500 mt-1">Uploading: {{ $progress }}%</div>
    </div>
    @endif

    <span style="color: green;">{{!empty($uploadedPath) ? "Saved":""}}</span>

    @if (!empty($uploadedPath))
        <div class="mt-2">
            <input type="hidden" 
                   class="form-control form-control-sm"
                   name="{{ $inputName }}" 
                   wire:model.defer="uploadedPath"
                   value="{{ $uploadedPath }}"
                   readonly />
        </div>
    @endif

    @error('file')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>

<script>
document.addEventListener('livewire:initialized', () => {
    @this.on('uploaded', (data) => {
        console.log('File uploaded:', data);
    });
});
</script>
