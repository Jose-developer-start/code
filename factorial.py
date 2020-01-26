def factorial(numero):
    if numero==1:
        return 1
    else:
        return numero * factorial(numero - 1)

if __name__=="__main__":
    try:
        numero=int(input("Ingrese el número: \n\n"))
        if numero<0:
            print("Error")
        else:
            print("El factorial del número es : ", factorial(numero))
    except:
        print("Se esperaba un valor")
