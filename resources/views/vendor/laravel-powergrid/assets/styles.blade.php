<link rel="stylesheet" href="{{ config('livewire-powergrid.plugins.flat_piker.css') }}">
@if(config('livewire-powergrid.theme') === 'bootstrap')
<link rel="stylesheet"
      href="{{ config('livewire-powergrid.plugins.bootstrap-select.css') }}"
      crossorigin="anonymous"/>
@endif
<style>
    table{width:100%}.table .checkbox-column{width:50px!important;max-width:50px!important;text-align:center}.form-control:disabled,.form-control[readonly]{opacity:1;background-color:#f8f9fa;border-color:#f8f9fa}.accordion-button{padding:.7rem .7rem}.btn-light,.has-search .form-control{padding-left:2.375rem}.has-search .form-control-feedback{position:absolute;z-index:2;display:block;width:2.375rem;height:2.375rem;line-height:2.375rem;text-align:center;pointer-events:none;color:#aaa}.new-control{position:relative;display:-ms-inline-flexbox;display:inline-flex;padding-left:1.5rem;margin-right:1rem;font-weight:100;font-size:14px}.page-link{@apply block bg-white text-blue-800 border-r border-gray-200 outline-none py-2 w-12 text-sm text-center;}.page-link:last-child{@apply border-0;}.page-link:hover{@apply bg-blue-700 text-white border-blue-700;}.page-item.active .page-link{@apply bg-blue-700 text-white border-blue-700;}.page-item.disabled .page-link{@apply bg-white text-gray-300 border-gray-200;}.livewire-powergrid{background-color:#e5e7eb;border-color:#f3f4f6;color:#374151;border-radius:4px}.page-link{color:gray!important}.page-item.active .page-link{color:#fff!important;background-color:gray;border-color:gray}.loader{border-top-color:#222;-webkit-animation:spinner 1.5s linear infinite;animation:spinner 1.5s linear infinite}@-webkit-keyframes spinner{0%{-webkit-transform:rotate(0)}100%{-webkit-transform:rotate(360deg)}}@keyframes spinner{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.form-check-input:checked{background-color:#198754;border-color:#198754}.img_copy{background:url(data:image/png;base64,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)}table thead{padding-left:15px;text-transform:uppercase;font-size:.75rem;color:#6b6a6a;padding-top:8px;padding-bottom:8px}
    .dropdown-toggle {
        background: white !important;
        border: 1px solid #ccce !important;
        padding-left: 10px !important;
        color: #7a7e82 !important;
    }
    .flatpickr {
        background: white !important;
        border: 1px solid #ccce !important;
        padding-left: 10px !important;
        color: #7a7e82 !important;
    }

</style>
