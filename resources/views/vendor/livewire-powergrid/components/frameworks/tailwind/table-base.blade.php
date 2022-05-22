<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="py-2 align-middle inline-block min-w-full w-full sm:px-2 lg:px-2">

            @include($theme->layout->header, [
                'enabledFilters' => $enabledFilters
            ])

            @if(config('livewire-powergrid.filter') === 'outside')
                @if(count($makeFilters) > 0)
                    <div>
                        <x-livewire-powergrid::frameworks.tailwind.filter
                            :makeFilters="$makeFilters"
                            :inputTextOptions="$inputTextOptions"
                            :tableName="$tableName"
                            :filters="$filters"
                            :theme="$theme"
                        />
                    </div>
                @endif
            @endif

            <div class="my-3">
                @include($theme->layout->message)
            </div>

            <div class="{{ $theme->table->divClass }} max-h-[calc(100vh-12rem)]" style="{{ $theme->table->divStyle }}">
                @include($table)
            </div>

            @include($theme->footer->view)
        </div>
    </div>
</div>
