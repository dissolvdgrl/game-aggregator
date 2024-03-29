<div wire:init="loadRecentlyReviewed" class="recently-reviewed space-y-12 mt-8">
    @forelse ($recentlyReviewed as $game)
        <div class="game bg-gray-800 rounded-lg-shadow-md flex p6">
            <div class="relative flex-none">
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div id="review_{{ $game['slug'] }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full text-xs" style="right:-20px; bottom: -20px;">
                </div>
            </div>
            <div class="ml-12">
                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">{{ $game['name'] }}</a>
                <div class="text-gray-400 mt-1">
                    {{ $game['platforms'] }}
                </div>
                <p class="mt-6 text-gray-400 hidden lg:block">{{ $game['summary'] }}</p>
            </div>
        </div>
    @empty
        @foreach (range(1, 3) as $game)
            <div class="game bg-gray-800 rounded-lg-shadow-md flex p6">
                <div class="relative flex-none">
                    <div class="bg-grey-700 w-32 lg:w-48 h-40 lg:h-56"></div>
                </div>
                <div class="ml-12">
                    <div class="inline-block text-lg text-transparent bg-gray-700 rounded font-semibold leading-tight hmt-4">Title goes here</div>
                    <div class="mt-8 space-y-4">
                        <span class="text-transparent bg-grey-700 rounded inline-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem, ipsum.</span>
                        <span class="text-transparent bg-grey-700 rounded inline-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem, ipsum.</span>
                        <span class="text-transparent bg-grey-700 rounded inline-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem, ipsum.</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>

@push('scripts')
    @include('_rating', [
        'event' => 'reviewGameWithRatingAdded'
    ])
@endpush