import math
start = 0
end = 375

for num in range(start, end, 15):
	print("Sin", num,":", math.sin(math.radians(num)),"Cos", num, ":", math.cos(math.radians(num)), "Tan", num, ":", math.tan(math.radians(num)))

#小数点2位までを四捨五入したパターン↓
print("\n以下は小数点2位までを四捨五入しています。\n")

start = 0
end = 375

for num in range(start, end, 15):
	print("Sin", num,":", round(math.sin(math.radians(num)),2),"Cos", num, ":", round(math.cos(math.radians(num)),2), "Tan", num, ":", round(math.tan(math.radians(num)),2))