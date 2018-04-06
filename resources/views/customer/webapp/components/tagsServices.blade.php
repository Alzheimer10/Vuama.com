<ul class="tags">
    @forelse($ServicesProvider as $service)
		<li class="tag">
			<a href="#"><span class="name">{{ $service->name }}</span>
				<span class="extra">480</span>
			</a>
		</li>
    @empty
    @endforelse
</ul>