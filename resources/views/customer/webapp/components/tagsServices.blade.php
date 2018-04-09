<ul class="tags">
    @forelse(\App\Models\Service::all()->where('status',1) as $service)
		<li class="tag">
			<a href="#"><span class="name">{{ $service->name }}</span>
				<span class="extra">480</span>
			</a>
		</li>
    @empty
    @endforelse
</ul>