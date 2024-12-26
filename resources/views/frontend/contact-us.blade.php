@extends('layouts.frontend-layout')

@section('title')
    Contact Us
@endsection

@section('content')
    <div id="content">
        <!-- begin post -->
        <div class="single">
            <h2>Contact Us</h2>
            <p>If you have any questions, feedback, or inquiries, please feel free to reach out to us. We are always here to
                help and look forward to hearing from you. You can contact us via the form below or through our social media
                channels. Our team is dedicated to providing you with the best support possible and will respond to your
                message as soon as we can. Whether you have a question about our services, need assistance with an order, or
                just want to share your thoughts, we are here to listen and assist you in any way we can. Thank you for
                choosing to connect with us.
            </p>
        </div>
        <!-- end post -->
        <!-- begin comments -->
        <div id="comments">
            <div id="respond">
                <form action="http://all-free-download.com/free-website-templates/" method="post" id="commentform">
                    <p>
                        <input type="text" name="author" id="author" value="" size="22" tabindex="1" />
                        <label for="author"><small>Name (required)</small></label>
                    </p>
                    <p>
                        <input type="text" name="email" id="email" value="" size="22" tabindex="2" />
                        <label for="email"><small>Mail (will not be published) (required)</small></label>
                    </p>
                    <p>
                        <input type="text" name="url" id="url" value="" size="22" tabindex="3" />
                        <label for="url"><small>Website</small></label>
                    </p>
                    <p>
                        <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
                    </p>
                    <p>
                        <button name="submit" type="submit" id="submit">Submit Comment</button>
                    </p>
                </form>
            </div>
        </div>
        <!-- end comments -->
    </div>
@endsection
