<div>
    @isset($jsPath)
        <script>
            {!! file_get_contents($jsPath) !!}
        </script>
    @endisset
    @isset($cssPath)
        <style>
            {!! file_get_contents($cssPath) !!}
        </style>
    @endisset
    <div x-data="LivewireUIModal()" x-init="init()" x-on:close.stop="setShowPropertyTo(false)"
        x-on:keydown.escape.window="closeModalOnEscape()"
        x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
        x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show" class="fixed inset-0 z-10 overflow-y-auto"
        class="modal fade" id="despesas" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
        aria-hidden="true" style="background: rgba(244, 244, 244, 0.642)">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                @forelse($components as $id => $component)
                    <div x-show.immediate="activeComponent == '{{ $id }}'" x-ref="{{ $id }}"
                        wire:key="{{ $id }}">
                        @livewire($component['name'], $component['attributes'], key($id))
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
