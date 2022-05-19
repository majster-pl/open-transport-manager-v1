<div class="min-w-full overflow-auto" style="max-height: calc(100vh - 3rem)">
    <div
        class="bg-gray-200 w-full px-5 py-3 rounded-b-lg border-blue-600 border-b-2 left-0 sticky sticky-top top-0">
        <div class="flex flex-wrap justify-between gap-3">
            <div class="flex flex-wrap justify-start gap-3 sticky sticky-top">
                <select class="form-select appearance-none
                                          block
                                          w-28
                                          md:w-28
                                          w-full
                                          px-3
                                          py-1.5
                                          text-base
                                          font-normal
                                          text-gray-700
                                          bg-white bg-clip-padding bg-no-repeat
                                          border border-solid border-gray-300
                                          rounded
                                          rounded-lg
                                          transition
                                          ease-in-out
                                          m-0
                                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    aria-label="Items Per page" wire:model="itemsPerPage">
                    {{-- <option selected>10</option> --}}
                    <option value="50" selected>50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="500">500</option>
                    <option value="9999999">All</option>
                </select>

                <div class="flex flex-row gap-1">
                    {{-- {{ $dateFrom}} --}}
                    <span class="my-auto">From:</span>
                    <div class="datepicker" data-mdb-toggle-button="false">
                        <input type="date"
                            class="form-control rounded rounded-lg block w-36 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="From date" wire:model="dateFrom" />
                    </div>
                    <span class="my-auto ml-2">To:</span>
                    <div class="datepicker" data-mdb-toggle-button="false">
                        <input type="date"
                            class="form-control rounded rounded-lg block w-36 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="To date" wire:model="dateTo" />
                    </div>
                </div>
            </div>
            <div class="input-group relative flex flex-wrap items-stretch w-full md:w-60">
                <input type="search"
                    class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button
                    class="btn inline-block px-3 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                    type="button" id="button-addon2">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="w-full md:max-w-screen-md md:min-w-full sm:max-w-screen-sm sm:min-w-screen-full">
        <table class="w-full">
            <thead class="bg-gray-100 border-b hidden md:table-header-group sticky sticky-top top-24">
                <tr class="rounded rounded-md">
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Order #
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Status
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Pickticket Control
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Invoiced To
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Ship To
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Ship To Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Customer PO#
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Planned Ship Via
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Value
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">
                        Created At
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-2 text-left">

                    </th>
                </tr>
            </thead>
            <div class="z-40 my-2 h-10 sticky sticky-top top-16 bg-gray-100">
                {{ $orders->links() }}
            </div>
            <tbody class="">
                @foreach ($orders as $order)

                <tr class="bg-white border-b hover:bg-gray-100 hover:cursor-pointer">
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->order}}
                    </td>
                    <td class="px-2 py-2 whitespace-nowrap hidden md:table-cell text-sm font-medium text-gray-900">
                        {{ $order->pickticket_status }}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->pickticket_control }}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->ar_account }}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->ship_to}}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->ship_to_name}}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->customer_po}}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->planned_ship_via}}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ $order->value }}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        {{ \Carbon\Carbon::parse($order->created_date)->format('d/m/Y')}}
                    </td>
                    <td class="text-sm text-gray-900 hidden md:table-cell font-light px-2 py-2 whitespace-nowrap">
                        <i class="ri-more-2-fill"></i>
                    </td>
                    <td class="grid md:hidden grid-cols-3 gap-3 bg-slate-100 border rounded rounded-lg p-3">

                        <div>
                            <span class="text-sm">Status:</span>
                        </div>
                        <div class="col-span-2">
                            {{ $order->pickticket_status }}
                        </div>
                        <div>
                            <span class="text-sm">Load No:</span>
                        </div>
                        <div class="col-span-2">10443322</div>
                        <div>
                            <span class="text-sm">Customer:</span>
                        </div>
                        <div class="col-span-2">Halfords</div>
                        <div>
                            <span class="text-sm">Courier:</span>
                        </div>
                        <div class="col-span-2">Webb</div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>