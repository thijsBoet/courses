def triangle_area(base, height):
  area = (1.0 / 2) * base * height
  return area

a1 = triangle_area(23, 25)
print(a1)
a2 = triangle_area(14, 2)
print(a2)

def fahrenheit2celsius(fahrenheit):
  celsius = (5.0 / 9.0) * (fahrenheit - 32)
  return celsius

c1 = fahrenheit2celsius(32)
c2 = fahrenheit2celsius(212)
print(c1, c2)

def fahrenheit2kelvin(fahrenheit):
  celsius = fahrenheit2celsius(fahrenheit)
  kelvin = celsius + 273.15
  return kelvin

k1 = fahrenheit2kelvin(32)
k2 = fahrenheit2kelvin(212)
print(k1, k2)

def hello():
  print("Hello World!")

hello()
h = hello()
print(h)