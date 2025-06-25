import React, { useState } from 'react';
import { Phone, Mail, MapPin, Clock, MessageCircle, Send } from 'lucide-react';

const Contact = () => {
  const [form, setForm] = useState({
    name: '',
    phone: '',
    email: '',
    type: '',
    message: ''
  });
  const [status, setStatus] = useState<'idle' | 'sending' | 'success' | 'error'>('idle');

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setForm({ ...form, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setStatus('sending');
    try {
      const res = await fetch('http://localhost:5000/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(form)
      });
      if (res.ok) {
        setStatus('success');
        setForm({ name: '', phone: '', email: '', type: '', message: '' });
      } else {
        setStatus('error');
      }
    } catch {
      setStatus('error');
    }
  };

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
            
            <form className="space-y-6" onSubmit={handleSubmit}>
              <div className="grid md:grid-cols-2 gap-6">
                <div>
                  <label className="block text-islamic-green-800 font-semibold mb-2">
                    الاسم الكامل
                  </label>
                  <input
                    type="text"
                    name="name"
                    value={form.name}
                    onChange={handleChange}
                    className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                    placeholder="اسمك الكامل"
                    required
                  />
                </div>
                <div>
                  <label className="block text-islamic-green-800 font-semibold mb-2">
                    رقم الهاتف
                  </label>
                  <input
                    type="tel"
                    name="phone"
                    value={form.phone}
                    onChange={handleChange}
                    className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                    placeholder="رقم هاتفك"
                    required
                  />
                </div>
              </div>
              
              <div>
                <label className="block text-islamic-green-800 font-semibold mb-2">
                  البريد الإلكتروني
                </label>
                <input
                  type="email"
                  name="email"
                  value={form.email}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                  placeholder="بريدك الإلكتروني"
                  required
                />
              </div>
              
              <div>
                <label className="block text-islamic-green-800 font-semibold mb-2">
                  نوع الاستشارة
                </label>
                <select
                  name="type"
                  value={form.type}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                  required
                >
                  <option value="">اختر نوع الاستشارة</option>
                  <option value="رقية شرعية عامة">رقية شرعية عامة</option>
                  <option value="علاج من العين والحسد">علاج من العين والحسد</option>
                  <option value="علاج من السحر">علاج من السحر</option>
                  <option value="علاج نفسي وروحي">علاج نفسي وروحي</option>
                  <option value="استشارة أخرى">استشارة أخرى</option>
                </select>
              </div>
              
              <div>
                <label className="block text-islamic-green-800 font-semibold mb-2">
                  تفاصيل الرسالة
                </label>
                <textarea
                  name="message"
                  rows={5}
                  value={form.message}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                  placeholder="اكتب تفاصيل حالتك أو استفسارك هنا..."
                  required
                ></textarea>
              </div>
              
              <button
                type="submit"
                className="w-full bg-gradient-islamic text-white px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center space-x-2 space-x-reverse"
                disabled={status === 'sending'}
              >
                <Send className="w-5 h-5" />
                <span>{status === 'sending' ? 'جاري الإرسال...' : 'إرسال الرسالة'}</span>
              </button>
            </form>
            {status === 'success' && (
              <div className="text-green-600 text-center font-bold mt-4">تم إرسال الرسالة بنجاح!</div>
            )}
            {status === 'error' && (
              <div className="text-red-600 text-center font-bold mt-4">حدث خطأ أثناء الإرسال. حاول مرة أخرى.</div>
            )}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;