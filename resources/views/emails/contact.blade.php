<div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #111;">
    <h2>Nouveau message de contact</h2>
    <p><strong>Nom:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{!! nl2br(e($data['message'])) !!}</p>
</div>