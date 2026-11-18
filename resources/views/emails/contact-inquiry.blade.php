<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Inquiry - PT Wira Griya</title>
</head>
<body style="margin:0;padding:24px;background:#f4f6f8;font-family:Arial,sans-serif;color:#1b2b42;">
    <div style="max-width:680px;margin:0 auto;padding:28px;background:#ffffff;border:1px solid #e5e7eb;border-radius:8px;">
        <h1 style="margin:0 0 8px;font-size:22px;color:#183e6e;">New Website Inquiry</h1>
        <p style="margin:0 0 24px;color:#64748b;font-size:14px;">A new message was submitted through the PT Wira Griya Contact Us page.</p>
        <table role="presentation" style="width:100%;border-collapse:collapse;font-size:14px;">
            <tr><td style="padding:9px 0;width:155px;color:#64748b;vertical-align:top;">Full Name</td><td style="padding:9px 0;font-weight:600;">{{ $inquiry['full_name'] }}</td></tr>
            <tr><td style="padding:9px 0;color:#64748b;vertical-align:top;">Company</td><td style="padding:9px 0;font-weight:600;">{{ $inquiry['company_name'] }}</td></tr>
            <tr><td style="padding:9px 0;color:#64748b;vertical-align:top;">Email</td><td style="padding:9px 0;"><a href="mailto:{{ $inquiry['email'] }}">{{ $inquiry['email'] }}</a></td></tr>
            <tr><td style="padding:9px 0;color:#64748b;vertical-align:top;">Phone</td><td style="padding:9px 0;">{{ $inquiry['phone'] }}</td></tr>
            <tr><td style="padding:9px 0;color:#64748b;vertical-align:top;">Subject</td><td style="padding:9px 0;">{{ $inquiry['subject'] ?: 'Not specified' }}</td></tr>
        </table>
        <h2 style="margin:24px 0 8px;font-size:16px;color:#183e6e;">Message</h2>
        <div style="padding:16px;background:#f8fafc;border-radius:6px;font-size:14px;line-height:1.6;white-space:pre-wrap;">{{ $inquiry['message'] }}</div>
        <p style="margin:24px 0 0;color:#64748b;font-size:12px;">This email was sent automatically from the PT Wira Griya website contact form. Reply to this email to respond to the sender.</p>
    </div>
</body>
</html>
