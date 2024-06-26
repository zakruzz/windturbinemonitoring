<div wire:ignore.self class="modal" id="modalConfig" tabindex="-1" role="dialog" aria-labelledby="modalConfig"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block" style="padding: 20px">
                <div class="block-header block-header-default" style="text-align: center">
                    <h3 class="block-title">Speed Configuration</h3>
                </div>
                <div class="block-content fs-sm">
                    <div class="mb-1">
                        <label class="form-label" for="range-3blades">Level {{ $range_speed }}</label>
                        <input type="range" wire:change="onChangeRangeSpeed" wire:model="range_speed" min="0"
                            max="3" class="form-range" id="range-3blades" style="border: 0px">
                        <span class="text-muted">Range Level 0 - 3</span>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm text-end ">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
