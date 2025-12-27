import sys
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

def send_email(subject, message):
    # Email configuration
    smtp_server = 'your_smtp_server'
    smtp_port = 587
    smtp_username = 'your_username'
    smtp_password = 'your_password'
    sender_email = 'your_email@example.com'
    receiver_email = 'customer_email@example.com'

    # Connect to the SMTP server
    smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
    smtp_conn.starttls()
    smtp_conn.login(smtp_username, smtp_password)

    # Create the email
    email = MIMEMultipart()
    email['From'] = sender_email
    email['To'] = receiver_email
    email['Subject'] = subject
    email.attach(MIMEText(message, 'plain'))

    # Send the email
    smtp_conn.sendmail(sender_email, receiver_email, email.as_string())

    # Disconnect from the SMTP server
    smtp_conn.quit()

if __name__ == "__main__":
    if len(sys.argv) > 1:
        transaction_details = sys.argv[1]
        subject = 'Transaction Alert'
        message = f'Your transaction details: {transaction_details}'
        send_email(subject, message)
        print("Email sent")
