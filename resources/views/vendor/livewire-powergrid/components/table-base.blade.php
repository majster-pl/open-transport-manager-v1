@props([
    'theme' => null
])
<div>
    <table class="table power-grid-table {{ $theme->tableClass }}"
           style="{{$theme->tableStyle}}">
        <thead class="{{$theme->theadClass}} sticky z-20 sticky-top my-2 -top-[1px] rounded-md border border-b-1"
               style="{{$theme->theadStyle}}">
                {{ $header }}
        </thead>
        <tbody class="{{$theme->tbodyClass}}"
               style="{{$theme->tbodyStyle}}">
                {{ $rows }}
        </tbody>
    </table>
</div>
