<div class="article-preview style1">
    @if(isset($previewItem))
        <!--author info part including ship-->
        <div class="article-author">
            <div class="user-pic">
                <img src={{ '/images/user/'.$previewItem['userPic'] }} class="user-pic small circle">
                <i class="fa fa-user"></i>
            </div>
            <a class='username' href={{'/user/'.$previewItem['authorID']}}>{{$previewItem['authorName']}}</a>
            <label> from: </label>
            <a class="shipName" href={{'/user/'.$previewItem['shipID']}}>{{$previewItem['shipName']}}</a>
        </div>

        <!--TITLE-->
        <h2 class="article-title" href={{'/'.$previewItem['type'].'/'.$previewItem['id']}}>{{$previewItem['title']}}</h2>

        <!--tags-->
        <div class="article-tags">
            @if(isset($previewItem['tags']))
                @foreach($previewItem['tags'] as $articleTag)
                    <a class="tag" href={{'/tags?tag='.$articleTag.'&from_category='.$previewItem['type']}}>tag1</a>
                @endforeach
            @endif
        </div>

        <!--cover pic-->
        <div class="article-cover">
            <img src={{$previewItem['cover'] }} href={{'/'.$previewItem['type'].'/'.$previewItem['id']}}>
        </div>
        <div class="article-description">
            <p>{{$previewItem['quote']}}</p>
        </div>
        
        <!--some info like view count, comments, likes, etc -->
        <div class="article-meta">
            <div class="article-status">
                <a class="read">
                    <i class="fa fa-eye"></i>
                    <span class="count">146</span>
                </a>
                <a class="like">
                    <i class="fa fa-heart-o"></i>
                    <span class="count">171</span>
                </a>
                <a class="comment">
                    <i class="fa fa-comment-o"></i>
                    <span class="count">212</span>
                </a>
            </div>
        </div>
    @else
        <div class="article-author">
            <div class="user-pic"><img src="" class="user-pic small circle"><i class="fa fa-user"></i></div><a>user 001</a>
            <label> from: </label><a class="article-cruiser">ship 001</a></div>
        <div class="article-title">
            <h2>Nothing like this</h2></div>
        <div class="article-tags"><a class="tag">tag1</a><a class="tag">tag2</a><a class="tag">tag3</a></div>
        <div class="article-cover"><img src="https://placem.at/places?w=900&amp;random=0.7891012062318623"></div>
        <div class="article-description">
            <p>.article-description.article-description.article-description.article-description.article-description.article-description.article-description.article-description.article-description</p>
        </div>
        <div class="article-meta">
            <div class="article-status"><a class="read"><i class="fa fa-eye"></i><span class="count">146</span></a><a class="like"><i class="fa fa-heart-o"></i><span class="count">171</span></a><a class="comment"><i class="fa fa-comment-o"></i><span class="count">212</span></a></div>
        </div>
    @endif
</div>