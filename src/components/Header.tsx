import React, { useState } from 'react';
import { Menu, X, Moon, Heart } from 'lucide-react';

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const navItems = [
    { href: '#home', label: 'الرئيسية' },
    { href: '#about', label: 'عن الرقية' },
    { href: '#plans', label: 'الخطط' },
    { href: '#contact', label: 'تواصل معنا' },
  ];

  return (
    <header className="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 shadow-lg">
      <div className="container mx-auto px-4">
        <div className="flex justify-between items-center h-16">
          {/* Logo */}
          <div className="flex items-center space-x-2 space-x-reverse">
            <div className="bg-gradient-islamic text-white p-2 rounded-lg">
              <Heart className="w-6 h-6" />
            </div>
            <div>
              <h1 className="text-xl font-bold text-islamic-green-700">العروسي للرقية</h1>
              <p className="text-xs text-gray-600">الشفاء بالقرآن والسنة</p>
            </div>
          </div>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex space-x-8 space-x-reverse">
            {navItems.map((item) => (
              <a
                key={item.href}
                href={item.href}
                className="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 font-medium"
              >
                {item.label}
              </a>
            ))}
          </nav>

          {/* CTA Button */}
          <div className="hidden md:block">
            <a
              href="#plans"
              className="bg-gradient-islamic text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200"
            >
              احجز جلستك
            </a>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden p-2"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            {isMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden py-4 bg-white border-t">
            <nav className="flex flex-col space-y-4">
              {navItems.map((item) => (
                <a
                  key={item.href}
                  href={item.href}
                  className="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 px-4 py-2"
                  onClick={() => setIsMenuOpen(false)}
                >
                  {item.label}
                </a>
              ))}
              <a
                href="#plans"
                className="bg-gradient-islamic text-white px-6 py-2 rounded-full mx-4 text-center"
                onClick={() => setIsMenuOpen(false)}
              >
                احجز جلستك
              </a>
            </nav>
          </div>
        )}
      </div>
    </header>
  );
};

export default Header;