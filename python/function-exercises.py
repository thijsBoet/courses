import math
import random

def miles_to_feet(miles):
  return miles * 5280

d1 = miles_to_feet(1)
d2 = miles_to_feet(10)
print(d1, d2)


def total_seconds(hours, minutes, seconds):
  sec = hours * 60 * 60
  sec += minutes * 60 + seconds
  return sec

s1 = total_seconds(1,1,1)
s2 = total_seconds(10, 10, 10)
print(s1, s2)


def rectangle_perimeter(width, height):
  return (2 * width) + (2 * height)
  
rp1 = rectangle_perimeter(2,2)
rp2 = rectangle_perimeter(4, 3)
print(rp1, rp2)


def circle_circumference(radius):
  return (radius*2)*math.pi

rad1 = circle_circumference(8)
rad2 = circle_circumference(3)
print(rad1, rad2)


def future_value(present_value, annual_rate, years):
  return present_value * (1 + 0.01 * annual_rate) ** years

val1 = future_value(1000, 7 , 10)
val2 = future_value(200, 4 , 5)
print(val1, val2)


def name_and_age(name, age):
  return name + " is " + str(age) + " years old."

na1 = name_and_age("Matthijs", 37)
na2 = name_and_age("Marja", 66)
print(na1, na2)


def point_distance(x0, y0, x1, y1):
  return ((x0 - x1) ** 2 + (y0 - y1) ** 2) ** 0.5
  
dis1 = point_distance(2, 2, 5, 6)
dis2 = point_distance(1, 1, 2, 1)
print(dis1, dis2)


def triangle_area(x0, y0, x1, y1, x2, y2):
  a = point_distance(x0, y0, x1, y1)
  b = point_distance(x0, y0, x2, y2)
  c = point_distance(x1, y1, x2, y2)

  s = (a + b + c) / 2

  return (s * (s - a) * (s - b) * (s - c)) ** 0.5
  
triArea1 = triangle_area(0, 0, 3, 4, 1, 1)
triArea2 = triangle_area(-2, 4, 1, 6, 2, 1)
print(triArea1, triArea2)


# def print_digits(number):
#   return "The tens digit is " + str(number // 10) + " ,and the ones digit is " + str(number % 10) + "."
# print_digits(65)

def randnum_1_60():
  return " "+  str(random.randrange(1,60)) + " "


def powerball():
  print randnum()

powerball()
