(function(){const e=`<div class="dz-preview dz-file-preview">
<div class="dz-details">
  <div class="dz-thumbnail">
    <img data-dz-thumbnail>
    <span class="dz-nopreview">No preview</span>
    <div class="dz-success-mark"></div>
    <div class="dz-error-mark"></div>
    <div class="dz-error-message"><span data-dz-errormessage></span></div>
    <div class="progress">
      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
    </div>
  </div>
  <div class="dz-filename" data-dz-name></div>
  <div class="dz-size" data-dz-size></div>
</div>
</div>`,a=document.querySelector("#dropzone-basic");a&&new Dropzone(a,{previewTemplate:e,parallelUploads:1,maxFilesize:5,addRemoveLinks:!0,maxFiles:1});const s=document.querySelector("#dropzone-basic1");s&&new Dropzone(s,{previewTemplate:e,parallelUploads:1,maxFilesize:5,addRemoveLinks:!0,maxFiles:1});const i=document.querySelector("#dropzone-basic2");i&&new Dropzone(i,{previewTemplate:e,parallelUploads:1,maxFilesize:5,addRemoveLinks:!0,maxFiles:1});const d=document.querySelector("#dropzone-multi");d&&new Dropzone(d,{previewTemplate:e,parallelUploads:1,maxFilesize:5,addRemoveLinks:!0})})();
