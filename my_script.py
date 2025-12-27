import sys

def process_number(number):
    # Perform some computation with the number
    result = int(number) * 2
    return result

if __name__ == "__main__":
    if len(sys.argv) > 1:
        input_number = sys.argv[1]
        result = process_number(input_number)
        print(result)
