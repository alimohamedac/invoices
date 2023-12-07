@if($title != null || $subtitle != null)
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ $title }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $subtitle }}</span>
            </div>
        </div>
    </div>
@endif
