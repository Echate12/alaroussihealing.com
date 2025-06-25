import React from 'react';
import Header from './components/Header';
import Hero from './components/Hero';
import About from './components/About';
import PricingPlans from './components/PricingPlans';
import Contact from './components/Contact';
import Footer from './components/Footer';

function App() {
  return (
    <div className="min-h-screen bg-gray-50 font-cairo">
      <Header />
      <Hero />
      <About />
      <PricingPlans />
      <Contact />
      <Footer />
    </div>
  );
}

export default App;