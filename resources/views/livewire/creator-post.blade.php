<div>
    <x-dialog class="text-black"/>
    <x-toast/>
    <div class="max-w-[1000px]"> 
        <x-table :quantity="[8, 10, 25, 100]" :$headers :$rows paginate striped filter>
            @interact('column_title', $row, $type)
            <p class="font-semibold text-wrap max-w-40">
                {{ $row->title }}
            </p>
            @endinteract
            @interact('column_description', $row, $type)
            <p class="truncate max-w-56">
                {{ $row->description }}
            </p>
            @endinteract
            @interact('column_status', $row, $type)
            <p @class(["font-semibold text-center text-white rounded-md px-2 max-w-20 text-wrap", 
            "bg-green-500" => $row->status == "published", 
            "bg-orange-500" => $row->status == "draft", 
            "bg-yellow-500" => $row->status == "request for publish",
            "bg-red-500" => $row->status == "rejected"])>
                @if ($row->status == "request for publish")
                    {{ "request" }}
                @else
                    {{ $row->status }}
                @endif
            </p>
            @endinteract
            @interact('column_is_accepted', $row, $type)
            @if ($row->is_accepted)
                <p class="font-semibold text-center text-white rounded-md px-2 bg-green-500">
                    Iya
                </p>
            @else 
                <p class="font-semibold text-center text-white rounded-md px-2 bg-red-500">
                    Tidak
                </p>
                {{-- <button class="text-white bg-blue-600 px-2 py-1 rounded-md mt-2 text-center">acc</button> --}}
            @endif
            @endinteract
            @interact('column_action', $row, $type)
            <div class="flex justify-center gap-1">
                <x-button icon="eye" wire:click="show({{ $row->id }})" color="blue"/>
                <x-button icon="pencil" wire:click="edit({{ $row->id }})" color="yellow"/>
                <x-button icon="trash" wire:click="delete({{ $row->id }})" color="red"/>
            </div>
            @endinteract
        </x-table>
    </div>
</div>