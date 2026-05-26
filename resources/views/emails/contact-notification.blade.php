<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Inquiry — SAMCC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9fafb;
            margin: 0;
            padding: 20px;
        }

        .wrapper {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .header {
            background: #430b13;
            color: white;
            padding: 32px 36px;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }

        .header p {
            margin: 6px 0 0;
            color: rgba(255, 255, 255, 0.7);
            font-size: 13px;
        }

        .badge {
            display: inline-block;
            background: #f59e0b;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-top: 12px;
        }

        .body {
            padding: 32px 36px;
        }

        .row {
            display: flex;
            gap: 0;
            margin-bottom: 16px;
            border-bottom: 1px solid #f3f4f6;
            padding-bottom: 16px;
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: .5px;
            color: #9ca3af;
            min-width: 90px;
            margin-top: 2px;
        }

        .value {
            font-size: 14px;
            color: #374151;
            flex: 1;
        }

        .message-box {
            background: #f9fafb;
            border-radius: 8px;
            padding: 16px;
            font-size: 14px;
            color: #374151;
            line-height: 1.7;
            white-space: pre-wrap;
        }

        .footer {
            background: #f9fafb;
            padding: 20px 36px;
            font-size: 12px;
            color: #9ca3af;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .btn {
            display: inline-block;
            background: #7a1f2e;
            color: white !important;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h1>📩 New Contact Inquiry</h1>
            <p>St. Anthony Mary Claret College — Website Contact Form</p>
            <span class="badge">New Message</span>
        </div>
        <div class="body">
            <div class="row">
                <span class="label">From</span>
                <span class="value"><strong>{{ $contactMessage->name }}</strong></span>
            </div>
            <div class="row">
                <span class="label">Email</span>
                <span class="value">{{ $contactMessage->email }}</span>
            </div>
            <div class="row">
                <span class="label">Subject</span>
                <span class="value"><strong>{{ $contactMessage->subject }}</strong></span>
            </div>
            <div class="row">
                <span class="label">Received</span>
                <span class="value">{{ $contactMessage->created_at->format('F j, Y \a\t g:i A') }}</span>
            </div>
            <div class="row" style="flex-direction:column;">
                <span class="label" style="margin-bottom: 10px;">Message</span>
                <div class="message-box">{{ $contactMessage->message }}</div>
            </div>
            <a href="{{ config('app.url') }}/admin/messages" class="btn">View in Admin Panel</a>
        </div>
        <div class="footer">
            This email was automatically sent from the SAMCC website contact form.<br>
            &copy; {{ date('Y') }} St. Anthony Mary Claret College — Quezon City, Philippines
        </div>
    </div>
</body>

</html>