import math
start = 0
end = 375

for num in range(start, end, 15):
	print("Sin", num,"°:", math.sin(math.radians(num)),"Cos", num, "°:", math.cos(math.radians(num)), "Tan", num, "°:", math.tan(math.radians(num)))

#小数点2位までを四捨五入したパターン↓
print("\n以下は小数点2位までを四捨五入しています。\n")

start = 0
end = 375

for num in range(start, end, 15):
	print("Sin", num,"°:", round(math.sin(math.radians(num)),2),"Cos", num, "°:", round(math.cos(math.radians(num)),2), "Tan", num, "°:", round(math.tan(math.radians(num)),2))
 

print("\n追記：Cos90が0ではなく6.12...という数値が入っているように、計算結果が一部正確でないのはPythonの数値演算精度による問題である。\n コンピューターは計算の際10進数を2進数に変換する。その過程で循環小数となってしまった場合、結果に誤差が生じてしまう。")
print("参考：https://qiita.com/papi_tokei/items/37a4e31949ba8efb6897")
