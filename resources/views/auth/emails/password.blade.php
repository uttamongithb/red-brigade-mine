Click here to reset your password: <a href="{{ $link = url('/main-admin/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
