<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\Comment[] $children
 * @property-read \App\Models\Ingoing $ingoing
 * @property-read \App\Models\Comment $parent
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property-read \App\Models\Ingoing $ingoing
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ingoing
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $ingoing
 */
	class Ingoing extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \App\Models\Ingoing $ingoing
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read \App\Models\User $user
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \App\Models\Ingoing $ingoing
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 */
	class User extends \Eloquent {}
}

