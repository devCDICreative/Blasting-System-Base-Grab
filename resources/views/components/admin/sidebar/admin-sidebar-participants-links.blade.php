<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
    <i class="fas fa-fw fa-cog"></i>
    <span>Participants</span>
  </a>
  <div id="collapsePosts" class="collapse" aria-labelledby="headingPosts" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Participants</h6>
      <a class="collapse-item" href="{{route('participant.create')}}">Create a Participant</a>
      <a class="collapse-item" href="{{route('participant.index')}}">View All Participants</a>
      <a class="collapse-item" href="{{route('participant.bt1')}}">Business Talk 1</a>
      <a class="collapse-item" href="{{route('participant.bt2')}}">Business Talk 2</a>
      <a class="collapse-item" href="{{route('participant.bt3')}}">Business Talk 3</a>
    </div>
  </div>
</li>