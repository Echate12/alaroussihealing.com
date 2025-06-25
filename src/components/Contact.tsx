import React from 'react';
import { Phone, Mail, MapPin, Clock, MessageCircle, Send } from 'lucide-react';

const Contact = () => {
  const contactInfo = [
    {
      icon: Phone,
      title: 'اتصل بنا',
      details: ['+966 50 123 4567', '+966 11 987 6543'],
      color: 'islamic-green'
    },
    {
      icon: Mail,
      title: 'البريد الإلكتروني',
      details: ['info@alaroussihealing.com', 'booking@alaroussihealing.com'],
      color: 'islamic-gold'
    },
    {
      icon: MapPin,
      title: 'العنوان',
      details: ['الرياض، المملكة العربية السعودية', 'نقدم خدماتنا أونلاين لجميع أنحاء العالم'],
      color: 'islamic-green'
    },
    {
      icon: Clock,
      title: 'ساعات العمل',
      details: ['السبت - الخميس: 9 صباحاً - 10 مساءً', 'الجمعة: 2 ظهراً - 10 مساءً'],
      color: 'islamic-gold'
    }
  ];

  return (
    <section id="contact" className="py-20 bg-white">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-islamic-green-800 mb-6 font-amiri">
            تواصل معنا
          </h2>
          <div className="flex justify-center items-center mb-6">
            <div className="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
            <MessageCircle className="w-6 h-6 text-islamic-gold-500" />
            <div className="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
          </div>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            نحن هنا لخدمتك ومساعدتك في رحلتك نحو الشفاء والعافية. تواصل معنا في أي وقت
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-16">
          {/* Contact Information */}
          <div>
            <h3 className="text-3xl font-bold text-islamic-green-800 mb-8 font-amiri">
              معلومات التواصل
            </h3>
            
            <div className="space-y-6">
              {contactInfo.map((info, index) => (
                <div
                  key={index}
                  className="bg-gray-50 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 border border-gray-100"
                >
                  <div className="flex items-start space-x-4 space-x-reverse">
                    <div className={`bg-gradient-${info.color} p-3 rounded-xl`}>
                      <info.icon className="w-6 h-6 text-white" />
                    </div>
                    <div className="flex-1">
                      <h4 className="text-xl font-bold text-islamic-green-800 mb-2">
                        {info.title}
                      </h4>
                      {info.details.map((detail, detailIndex) => (
                        <p key={detailIndex} className="text-gray-600 leading-relaxed">
                          {detail}
                        </p>
                      ))}
                    </div>
                  </div>
                </div>
              ))}
            </div>

            {/* Quick Action Buttons */}
            <div className="mt-8 space-y-4">
              <a
                href="tel:+966501234567"
                className="flex items-center justify-center space-x-3 space-x-reverse bg-gradient-islamic text-white px-6 py-4 rounded-2xl hover:shadow-lg transition-all duration-300 w-full"
              >
                <Phone className="w-5 h-5" />
                <span className="font-semibold">اتصل الآن</span>
              </a>
              <a
                href="https://wa.me/966501234567"
                className="flex items-center justify-center space-x-3 space-x-reverse bg-green-600 text-white px-6 py-4 rounded-2xl hover:shadow-lg transition-all duration-300 w-full"
              >
                <MessageCircle className="w-5 h-5" />
                <span className="font-semibold">واتساب</span>
              </a>
            </div>
          </div>

          {/* Contact Form */}
          <div>
            <h3 className="text-3xl font-bold text-islamic-green-800 mb-8 font-amiri">
              أرسل رسالة
            </h3>
            
            <form className="space-y-6">
              <div className="grid md:grid-cols-2 gap-6">
                <div>
                  <label className="block text-islamic-green-800 font-semibold mb-2">
                    الاسم الكامل
                  </label>
                  <input
                    type="text"
                    className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                    placeholder="اسمك الكامل"
                  />
                </div>
                <div>
                  <label className="block text-islamic-green-800 font-semibold mb-2">
                    رقم الهاتف
                  </label>
                  <input
                    type="tel"
                    className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                    placeholder="رقم هاتفك"
                  />
                </div>
              </div>
              
              <div>
                <label className="block text-islamic-green-800 font-semibold mb-2">
                  البريد الإلكتروني
                </label>
                <input
                  type="email"
                  className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                  placeholder="بريدك الإلكتروني"
                />
              </div>
              
              <div>
                <label className="block text-islamic-green-800 font-semibold mb-2">
                  نوع الاستشارة
                </label>
                <select className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200">
                  <option>اختر نوع الاستشارة</option>
                  <option>رقية شرعية عامة</option>
                  <option>علاج من العين والحسد</option>
                  <option>علاج من السحر</option>
                  <option>علاج نفسي وروحي</option>
                  <option>استشارة أخرى</option>
                </select>
              </div>
              
              <div>
                <label className="block text-islamic-green-800 font-semibold mb-2">
                  تفاصيل الرسالة
                </label>
                <textarea
                  rows={5}
                  className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                  placeholder="اكتب تفاصيل حالتك أو استفسارك هنا..."
                ></textarea>
              </div>
              
              <button
                type="submit"
                className="w-full bg-gradient-islamic text-white px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center space-x-2 space-x-reverse"
              >
                <Send className="w-5 h-5" />
                <span>إرسال الرسالة</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;